<?php
namespace gdm\BlogBundle\Antispam;

class gdmAntispam extends \Twig_Extension
{
	protected $mailer;
	protected $locale;
	protected $nbForSpam;

	public function __construct(\Swift_Mailer $mailer, $nbForSpam)
	{
		$this->mailer = $mailer;
		$this->nbForSpam = (int) $nbForSpam;
	}

	//  Twig va exécuter cette méthode pour savoir quelle(s) fonction(s) ajoute notre service
	public function getFunctions()
	{
		return array(
				'checkIfSpam' => new \Twig_Function_Method($this, 'isSpam')
		);
	}

	public function setLocale($locale)
	{
		$this->locale = $locale;
	}

    // La méthode getName() identifie votre extension Twig, elle est obligatoire
	public function getName()
	{
		return 'gdmAntispam';
	}

	public function isSpam($text)
	{
		return ($this->countLinks($text) + $this->countMails($text)) >=$this->nbForSpam;
	}
	private function countLinks($text)
	{
		preg_match_all('#(http|https|ftp)://([A-Z0-9][A-Z0-9_-]*(?:.[A-Z0-9][A-Z0-9_-]*)+):?(d+)?/?#i',$text,$matches);
		return count($matches[0]);
	}
	private function countMails($text)
	{
		preg_match_all('#[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}#i',$text,$matches);
		return count($matches[0]);
	}
}