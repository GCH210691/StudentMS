<?php

namespace App\Entity;

use App\Repository\StudentInfoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentInfoRepository::class)]
class StudentInfo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $studentName = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $studentDoB = null;

    #[ORM\Column(length: 255)]
    private ?string $studentEmail = null;

    #[ORM\Column(length: 255)]
    private ?string $studentNumber = null;

    #[ORM\Column]
    private ?bool $studentGender = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentName(): ?string
    {
        return $this->studentName;
    }

    public function setStudentName(string $studentName): self
    {
        $this->studentName = $studentName;

        return $this;
    }

    public function getStudentDoB(): ?\DateTimeInterface
    {
        return $this->studentDoB;
    }

    public function setStudentDoB(\DateTimeInterface $studentDoB): self
    {
        $this->studentDoB = $studentDoB;

        return $this;
    }

    public function getStudentEmail(): ?string
    {
        return $this->studentEmail;
    }

    public function setStudentEmail(string $studentEmail): self
    {
        $this->studentEmail = $studentEmail;

        return $this;
    }

    public function getStudentNumber(): ?string
    {
        return $this->studentNumber;
    }

    public function setStudentNumber(string $studentNumber): self
    {
        $this->studentNumber = $studentNumber;

        return $this;
    }

    public function isStudentGender(): ?bool
    {
        return $this->studentGender;
    }

    public function setStudentGender(bool $studentGender): self
    {
        $this->studentGender = $studentGender;

        return $this;
    }
}
