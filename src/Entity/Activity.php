<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivityRepository")
 */
class Activity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ActivityType", inversedBy="activities")
     * @ORM\JoinColumn(nullable=true)
     */
    private $activityType;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private $image;

    /**
     * @ORM\Column(type="string")
     */
    private $audio;

    /**
     * @ORM\Column(type="string")
     */
    private $video;

    /**
     * @ORM\Column(type="string")
     */
    private $preText;

    /**
     * @ORM\Column(type="string")
     */
    private $postText;

    /**
     * @ORM\Column(type="string")
     */
    private $answer1;

    /**
     * @ORM\Column(type="string")
     */
    private $answer2;

    /**
     * @ORM\Column(type="string")
     */
    private $answer3;

    /**
     * @ORM\Column(type="string")
     */
    private $answer4;

    /**
     * @ORM\Column(type="string")
     */
    private $answer5;

    /**
     * @ORM\Column(type="string")
     */
    private $answer6;

    /**
     * @ORM\Column(type="string")
     */
    private $answer7;

    /**
     * @ORM\Column(type="string")
     */
    private $answer8;

    /**
     * @ORM\Column(type="string")
     */
    private $answer9;

    /**
     * @ORM\Column(type="string")
     */
    private $answer10;

    /**
     * @ORM\Column(type="integer")
     */
    private $sequence;






    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getActivityType():?ActivityType
    {
        return $this->activityType;
    }

    /**
     * @param mixed $activityType
     */
    public function setActivityType(ActivityType $activityType = null): void
    {
        $this->activityType = $activityType;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @param mixed $audio
     */
    public function setAudio($audio): void
    {
        $this->audio = $audio;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video): void
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getPreText()
    {
        return $this->preText;
    }

    /**
     * @param mixed $preText
     */
    public function setPreText($preText): void
    {
        $this->preText = $preText;
    }

    /**
     * @return mixed
     */
    public function getPostText()
    {
        return $this->postText;
    }

    /**
     * @param mixed $postText
     */
    public function setPostText($postText): void
    {
        $this->postText = $postText;
    }

    /**
     * @return mixed
     */
    public function getAnswer1()
    {
        return $this->answer1;
    }

    /**
     * @param mixed $answer1
     */
    public function setAnswer1($answer1): void
    {
        $this->answer1 = $answer1;
    }

    /**
     * @return mixed
     */
    public function getAnswer2()
    {
        return $this->answer2;
    }

    /**
     * @param mixed $answer2
     */
    public function setAnswer2($answer2): void
    {
        $this->answer2 = $answer2;
    }

    /**
     * @return mixed
     */
    public function getAnswer3()
    {
        return $this->answer3;
    }

    /**
     * @param mixed $answer3
     */
    public function setAnswer3($answer3): void
    {
        $this->answer3 = $answer3;
    }

    /**
     * @return mixed
     */
    public function getAnswer4()
    {
        return $this->answer4;
    }

    /**
     * @param mixed $answer4
     */
    public function setAnswer4($answer4): void
    {
        $this->answer4 = $answer4;
    }

    /**
     * @return mixed
     */
    public function getAnswer5()
    {
        return $this->answer5;
    }

    /**
     * @param mixed $answer5
     */
    public function setAnswer5($answer5): void
    {
        $this->answer5 = $answer5;
    }

    /**
     * @return mixed
     */
    public function getAnswer6()
    {
        return $this->answer6;
    }

    /**
     * @param mixed $answer6
     */
    public function setAnswer6($answer6): void
    {
        $this->answer6 = $answer6;
    }

    /**
     * @return mixed
     */
    public function getAnswer7()
    {
        return $this->answer7;
    }

    /**
     * @param mixed $answer7
     */
    public function setAnswer7($answer7): void
    {
        $this->answer7 = $answer7;
    }

    /**
     * @return mixed
     */
    public function getAnswer8()
    {
        return $this->answer8;
    }

    /**
     * @param mixed $answer8
     */
    public function setAnswer8($answer8): void
    {
        $this->answer8 = $answer8;
    }

    /**
     * @return mixed
     */
    public function getAnswer9()
    {
        return $this->answer9;
    }

    /**
     * @param mixed $answer9
     */
    public function setAnswer9($answer9): void
    {
        $this->answer9 = $answer9;
    }

    /**
     * @return mixed
     */
    public function getAnswer10()
    {
        return $this->answer10;
    }

    /**
     * @param mixed $answer10
     */
    public function setAnswer10($answer10): void
    {
        $this->answer10 = $answer10;
    }

    /**
     * @return mixed
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param mixed $sequence
     */
    public function setSequence($sequence): void
    {
        $this->sequence = $sequence;
    }


}
