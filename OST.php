<?php

class OST implements JsonSerializable
{
    private int $uniqueID;
    private string $name;
    private string $vGameName;
    private int $releaseYear;
    private array $tracklist;

    public function __construct($uniqueID, $name, $releaseYear, $tracklist, $vGameName){
        $this->uniqueID = $uniqueID;
        $this->name = $name;
        $this->releaseYear = $releaseYear;
        $this->tracklist = $tracklist;
        $this->vGameName = $vGameName;
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
    public function getVGameName(): string
    {
        return $this->vGameName;
    }

    /**
     * @return int
     */
    public function getReleaseYear(): int
    {
        return $this->releaseYear;
    }

    /**
     * @return array
     */
    public function getTracklist(): array
    {
        return $this->tracklist;
    }

    public function __toString() : string
    {
        return
            $this->uniqueID . ", " .
            $this->name . ", " .
            $this->releaseYear . ", " .
            $this->vGameName . ", ( " .
            implode(', ', $this->tracklist) . " )";
    }

    public function jsonSerialize(): array
    {
        return ["uniqueID" => $this->uniqueID, "name" => $this->name, "releaseYear" => $this->releaseYear, "vGameName" => $this->vGameName, "tracklist" => $this->tracklist];
    }
}