<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameRepository")
 */
class Game
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team")
     */
    private $team1;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team")
     */
    private $team2;

    /**
     * @ORM\ManyToOne(targetEntity="Tournament", inversedBy="games")
     */
    private $tournament;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="score1", type="integer", nullable=true)
     */
    private $score1;

    /**
     * @var int
     *
     * @ORM\Column(name="score2", type="integer", nullable=true)
     */
    private $score2;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set score1
     *
     * @param integer $score1
     *
     * @return Game
     */
    public function setScore1($score1)
    {
        $this->score1 = $score1;

        return $this;
    }

    /**
     * Get score1
     *
     * @return int
     */
    public function getScore1()
    {
        return $this->score1;
    }

    /**
     * Set score2
     *
     * @param integer $score2
     *
     * @return Game
     */
    public function setScore2($score2)
    {
        $this->score2 = $score2;

        return $this;
    }

    /**
     * Get score2
     *
     * @return int
     */
    public function getScore2()
    {
        return $this->score2;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Game
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set team1
     *
     * @param \AppBundle\Entity\Team $team1
     *
     * @return Game
     */
    public function setTeam1(\AppBundle\Entity\Team $team1 = null)
    {
        $this->team1 = $team1;

        return $this;
    }

    /**
     * Get team1
     *
     * @return \AppBundle\Entity\Team
     */
    public function getTeam1()
    {
        return $this->team1;
    }

    /**
     * Set team2
     *
     * @param \AppBundle\Entity\Team $team2
     *
     * @return Game
     */
    public function setTeam2(\AppBundle\Entity\Team $team2 = null)
    {
        $this->team2 = $team2;

        return $this;
    }

    /**
     * Get team2
     *
     * @return \AppBundle\Entity\Team
     */
    public function getTeam2()
    {
        return $this->team2;
    }

    /**
     * Set tournament
     *
     * @param \AppBundle\Entity\Tournament $tournament
     *
     * @return Game
     */
    public function setTournament(\AppBundle\Entity\Tournament $tournament = null)
    {
        $this->tournament = $tournament;

        return $this;
    }

    /**
     * Get tournament
     *
     * @return \AppBundle\Entity\Tournament
     */
    public function getTournament()
    {
        return $this->tournament;
    }
}
