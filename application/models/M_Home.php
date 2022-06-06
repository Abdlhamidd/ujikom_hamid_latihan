<?php
class M_Home extends CI_Model
{
	function MgetData()
	{
		return $this->db->get('bangun_datar');
	}

    function total_jumlah()
    {
        $this->db->select_sum('hasil');
        $query = $this->db->get('bangun_datar');
        return $query->row()->hasil;
    }
    
    function total_segitiga()
    {
        $this->db->select_sum('hasil');
        $this->db->where('nm_bangundatar', 'segitiga');
        $query = $this->db->get('bangun_datar');
        return $query->row()->hasil;
    }

    function total_persegi()
    {
        $this->db->select_sum('hasil');
        $this->db->where('nm_bangundatar', 'persegi');
        $query = $this->db->get('bangun_datar');
        return $query->row()->hasil;
    }

    function total_lingkaran()
    {
        $this->db->select_sum('hasil');
        $this->db->where('nm_bangundatar', 'lingkaran');
        $query = $this->db->get('bangun_datar');
        return $query->row()->hasil;
    }
}
