<?php
// We did this one for you
class Artist
{
    private $id_artist;
    private $name;
    private $image;
    private $birth_date;

    public function getIdArtist()
    {
        return $this->id_artist;
    }

    public function setIdArtist($param)
    {
        $this->id_artist = $param;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($param)
    {
        $this->name = $param;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($param)
    {
        $this->image = $param;
    }

    public function getBirthDate()
    {
        return $this->birth_date;
    }

    public function setBirthDate($param)
    {
        $this->birth_date = $param;
    }
}
