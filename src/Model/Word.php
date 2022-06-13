<?php 
namespace mydico\Model;

/*
*
*/
class Word
{
	protected $verbs, $preteri, $past, $traduction;

    /**
     * @return mixed
     */
    public function getVerbs()
    {
        return $this->verbs;
    }

    /**
     * @param mixed $verbs
     */
    public function setVerbs($verbs)
    {
        $this->verbs = $verbs;
    }

    /**
     * @param mixed $preteri
     */
    public function setPreteri($preteri)
    {
        $this->preteri = $preteri;
    }

    /**
     * @return mixed
     */
    public function getPast()
    {
        return $this->past;
    }

    /**
     * @param mixed $past
     */
    public function setPast($past)
    {
        $this->past = $past;
    }

    /**
     * @return mixed
     */
    public function getTraduction()
    {
        return $this->traduction;
    }

    /**
     * @param mixed $traduction
     */
    public function setTraduction($traduction)
    {
        $this->traduction = $traduction;
    }

	/*
	*requette
	*insertion
	*/
	public function insertWord()
	{	
		$bdd = ConnectDb::getDB();
		$req = $bdd->query('INSERT INTO verbs (verbs,preteri,past,traduction) value("'.$this->verbs.'","'.$this->preteri.'","'.$this->past.'","'.$this->traduction.'")');
	}
	/*
	*requette
	*selection
	*/
	public function selectWord()
	{
		$bdd = ConnectDb::getDB();

	 	return	$req = $bdd->query('SELECT* FROM verbs');
	}
	/*
	*requette
	*rechereche
	*/
	public function seach($search)
	{
		$bdd = ConnectDb::getDB();

		return $req = $bdd->query('SELECT *	 FROM verbs WHERE verbs LIKE "%'.$search.'%" or preteri LIKE "%'.$search.'%" or  past LIKE "%'.$search.'%" or traduction LIKE "%'.$search.'%"');
	}
}