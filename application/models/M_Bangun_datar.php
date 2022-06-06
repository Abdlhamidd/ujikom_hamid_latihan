<?php
class M_Bangun_datar extends CI_Model
{
	function MgetData()
	{
		return $this->db->get('bangun_datar');
	}

    function UpdateDatal($qty,$id)
    {
        $this->db->set('hasil', $qty);
        $this->db->where('id', $id);
        $this->db->update('bangun_datar');
    }
    function UpdateDatas($qty,$id)
    {
        $this->db->set('hasil', $qty);
        $this->db->where('id', $id);
        $this->db->update('bangun_datar');
    }
    function UpdateDatap($qty,$id)
    {
        $this->db->set('hasil', $qty);
        $this->db->where('id', $id);
        $this->db->update('bangun_datar');
    }
}
