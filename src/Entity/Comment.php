<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $tweet_id = null;

    #[ORM\Column(length: 280)]
    private ?string $content = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTweetId(): ?int
    {
        return $this->tweet_id;
    }

    public function setTweetId(int $tweet_id): static
    {
        $this->tweet_id = $tweet_id;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }
}
