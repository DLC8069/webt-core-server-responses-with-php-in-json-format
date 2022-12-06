<?php

class Song implements JsonSerializable
{
    private int $uniqueID;
    private string $name;
    private string $artist;
    private int $tracknumber;
    private float $duration;

    /**
     * @param int $uniqueID
     * @param string $name
     * @param string $artist
     * @param int $tracknumber
     * @param float $duration
     */
    public function __construct(int $uniqueID, string $name, string $artist, int $tracknumber, float $duration)
    {
        $this->uniqueID = $uniqueID;
        $this->name = $name;
        $this->artist = $artist;
        $this->tracknumber = $tracknumber;
        $this->duration = $duration;
    }

    /**
     * @return int
     */
    public function getUniqueID(): int
    {
        return $this->uniqueID;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getArtist(): string
    {
        return $this->artist;
    }

    /**
     * @return int
     */
    public function getTracknumber(): int
    {
        return $this->tracknumber;
    }

    /**
     * @return float
     */
    public function getDuration(): float
    {
        return $this->duration;
    }

    public function __toString() : string
    {
        return
            $this->uniqueID . ", " .
            $this->name . ", " .
            $this->artist . ", " .
            $this->tracknumber . ", " .
            $this->duration;
    }


    public function jsonSerialize(): array
    {
        return ["uniqueID" => $this->uniqueID, "name" => $this->name, "artist" => $this->artist, "tracknumber" => $this->tracknumber, "duration" => $this->duration];
    }
}