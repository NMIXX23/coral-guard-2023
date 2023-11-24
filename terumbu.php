<?php
class Terumbu
{
    protected $db;
    function __construct($db)
    {
        $this->db = $db;
    }

    function get_maps()
    {
        $cont = [];
        $row = $this->db->prepare("SELECT * FROM t_maps WHERE validasi = 1");
        $row->execute();
        $hasil = $row->fetchAll();
        foreach ($hasil as $value) {
            array_push($cont, [
                "type" => "Feature",
                "properties" => [
                    "fid" => $value['id'],
                    "Id" => $value['id'],
                    "Kategori" => $value['kategori'],
                    "Region" => $value['region'],
                    "gambar" => $value['gambar'],
                    "title"=>$value['region'],
                ],
                "geometry" => [
                    "type" => "Point",
                    "coordinates" => [
                        $value['latitude'],
                        $value['longitude']
                    ]
                ]
            ]);
        }
        $arr = [
            "type" => "FeatureCollection",
            "name" => "KondisiTerumbuKarang_31",
            "crs" => [
                "type" => "name",
                "properties" => [
                    "name" => "urn:ogc:def:crs:OGC:1.3:CRS84"
                ]
            ],
            "features" => $cont
        ];
        return json_encode($arr);
    }

    function tampil_data($tabel)
    {
        $row = $this->db->prepare("SELECT * FROM $tabel");
        $row->execute();
        return $hasil = $row->fetchAll();
    }
    function add_data($kategori, $region, $lat, $long, $gambar)
    {
        $data = $this->db->prepare("INSERT INTO kondisi_terumbu (kategori,region,lat,`long`,gambar) VALUES ('" . $kategori . "', '" . $region . "', '" . $lat . "', '" . $long . "','" . $gambar . "')");
        $data->execute();
        return $data->rowCount();
    }
    function get_by_id($id)
    {
        $query = $this->db->prepare("SELECT * FROM kondisi_terumbu where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($kategori, $region, $lat, $long, $id,$gambar)
    {
        if($gambar == null){
            $query = $this->db->prepare('UPDATE kondisi_terumbu set kategori=?,region=?,lat=?,`long`=? where id=?');
    
            $query->bindParam(1, $kategori);
            $query->bindParam(2, $region);
            $query->bindParam(3, $lat);
            $query->bindParam(4, $long);
            $query->bindParam(5, $id);
        }else{
            $query = $this->db->prepare('UPDATE kondisi_terumbu set kategori=?,region=?,lat=?,`long`=?,gambar=? where id=?');
    
            $query->bindParam(1, $kategori);
            $query->bindParam(2, $region);
            $query->bindParam(3, $lat);
            $query->bindParam(4, $long);
            $query->bindParam(5, $gambar);
            $query->bindParam(6, $id);
        }

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM kondisi_terumbu where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }
}
