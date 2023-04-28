<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Comment extends CI_Model
{
	public function showAllComment($id)
	{
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->join('user', 'user.id = comment.user_id');
		$this->db->where('comment.article_id', $id);

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllCommentById($id)
	{
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->where('id_comment', $id);

		$data = $this->db->get();

		return $data->row_array();
	}

	public function addComment()
	{
		$allComment = $this->showAllComment($this->uri->segment(3));
		$newIdOrder = count($allComment) + 1;
		$newId = "CO" . $newIdOrder;
		$idCheck = $this->showAllCommentById($newId);

		if (!$idCheck) {
			$id = $newId;
		} else {
			$i = 1;
			while ($idCheck) {
				$newId = "CO" . ($newIdOrder + $i);
				$idCheck = $this->showAllCommentById($newId);
				$i++;
			}
			$id = $newId;
		}

		$field = array(
			'id_comment' => $id,
			'comment_text' => $this->input->post('comment'),
			'article_id' => $this->input->post('article_id'),
			'user_id' => $this->session->userdata('id')
		);
		$this->db->insert('comment', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}

/* End of file M_comment.php */
/* Location: ./application/models/M_comment.php */