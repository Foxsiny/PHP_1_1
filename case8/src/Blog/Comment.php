<?php

namespace GeekBrains\LevelTwo\Blog;

class Comment
{
    public function __construct(
        private int $id,
        private User $user,
        private Post $post,
        private string $text
    )
    {
        
    }

        /**
         * Get the value of id
         */ 
        public function getId(): int
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId(int $id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of user
         */ 
        public function getUser(): User
        {
                return $this->user;
        }

        /**
         * Set the value of user
         *
         * @return  self
         */ 
        public function setUser(User $user): self
        {
                $this->user = $user;

                return $this;
        }

        /**
         * Get the value of post
         */ 
        public function getPost(): Post
        {
                return $this->post;
        }

        /**
         * Set the value of post
         *
         * @return  self
         */ 
        public function setPost(Post $post): self
        {
                $this->post = $post;

                return $this;
        }

        /**
         * Get the value of text
         */ 
        public function getText(): string
        {
                return $this->text;
        }

        /**
         * Set the value of text
         *
         * @return  self
         */ 
        public function setText(string $text): self
        {
                $this->text = $text;

                return $this;
        }

        public function __toString(){
                return $this->user . " пишет Комент " . $this->text;
        }
}