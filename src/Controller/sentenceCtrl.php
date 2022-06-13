<?php 

namespace mydico\Controller;

use mydico\Model\Form;


/**
 * 
 */
class sentenceCtrl 
{
	private $subject, $verb, $object;

	public function getSubject()
	{
		return $this->subject;
	}
	public function setSubject($subject)
	{
		$this->subject = $subject;
	}
	public function getVerbe()
	{
		return $this->verb;
	}
	public function setVerbe($verb)
	{
		$this->verb = $verb;
	}
	public function getObject()
	{
		return $this->object;
	}
	public function setObject($object)
	{
		$this->object = $object;
	}
	/**
	 * Afficher les temps du verbe
	 */
	public function showTense()
	{
		$temp = new Form();
		$temps = $temp->selectTense();
		while($a = $temps->fetch())
		{
			echo'
				<option value ="'.$a['id_tense'].'">'.$a['tense'].'</option>
			';
		}
	}
	/**
	 * Afficher les aspects
	 */
	public function showAspect()
	{
		$temp = new Form();
		$temps = $temp->selectAspect();
		while($b = $temps->fetch())
		{
			echo'
				<option value ="'.$b['id_aspect'].'">'.$b['aspect'].'</option>
			';
		}
	}
	/**
	 * Afficher les formes
	 */
	public function showForm()
	{
		$temp = new Form();
		$temps = $temp->selectForm();
		while($c = $temps->fetch())
		{
			echo'
				<option value ="'.$c['id_form'].'">'.$c['form'].'</option>
			';
		}
	}
}