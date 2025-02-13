<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: "messages")]
class Tablafdge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;
    
    #[ORM\Column(type: "string", length: 255)]
    private string $frasefdge;

    public function getId(): int
    {
        return $this->id;
    }

    public function getFrasefdge(): string
    {
        return $this->frasefdge;
    }

    public function setFrasefdge(string $frasefdge): self
    {
        $this->frasefdge = $frasefdge;
        return $this;
    }

}