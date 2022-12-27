<?php

namespace App\Entity;

use App\Repository\NoticeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NoticeRepository::class)]
class Notice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $NoticeDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NoticeInfo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoticeDate(): ?\DateTimeInterface
    {
        return $this->NoticeDate;
    }

    public function setNoticeDate(\DateTimeInterface $NoticeDate): self
    {
        $this->NoticeDate = $NoticeDate;

        return $this;
    }

    public function getNoticeInfo(): ?string
    {
        return $this->NoticeInfo;
    }

    public function setNoticeInfo(?string $NoticeInfo): self
    {
        $this->NoticeInfo = $NoticeInfo;

        return $this;
    }
}
