<?php
namespace gdm\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use gdm\BlogBundle\Entity\Article;
use gdm\BlogBundle\Entity\Image;
use gdm\BlogBundle\Entity\Commentaire;
use gdm\BlogBundle\Form\ArticleType;
use gdm\BlogBundle\Form\CommentaireType;
use gdm\BlogBundle\Form\ArticleEditType;
use	Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class BlogController extends Controller
{
	public function indexAction($page)
	{
		/* ti zan m generer url:
		$id = 5;
		$url = $this->generateUrl('gdmblog_voir', array('id' => $id));
		return $this->redirect($url);
		//return $this->render('gdmBlogBundle:Blog:index.html.twig',array('article_id' => '5','nom' => 'ratiana'));
		/*if( $page < 1 )
		{
			throw $this->createNotFoundException('Page inexistante (page ='.$page.')');
		}
		return $this->render('gdmBlogBundle:Blog:index.html.twig',array('nom' => 'tiana','article_id' => '5'));
		//return $this->render('gdmBlogBundle:Blog:index.html.twig', array('articles' => array()));
		/*$articles = array(
			array(
			'titre' => 'Mon weekend a Phi Phi Island !',
			'id' => 1,
			'auteur' => 'winzou',
			'contenu' => 'Ce weekend était trop bien. Blabla…',
			'date' => new \Datetime()),
			array(
			'titre' => 'Repetition du National Day de Singapour',
			'id' => 2,
			'auteur' => 'winzou',
			'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
			'date' => new \Datetime()),
			array(
			'titre' => 'Chiffre d\'affaire en hausse',
			'id' => 3,
			'auteur' => 'M@teo21',
			'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
			'date' => new \Datetime())
			);
		//return $this->render('gdmBlogBundle:Blog:index.html.twig', array('articles' => $articles));
		//$mailer = $this->container->get('mailer');
		$text="mahery@gmail.com, ferzf@yahoo.fr; medfezfzefgmail.com";
		$antispam = $this->container->get('gdm_blog.antispam');
		if ($antispam->isSpam($text)) {
			throw new \Exception('Votre message a été détecté comme spam!');
		}
		return $this->render('gdmBlogBundle:Blog:index.html.twig', array('articles' => $articles));*/
		if ($page < 1) {
			throw $this->createNotFoundException('Page inexistante (page ='.$page.')');
		}
		$articles = $this->getDoctrine()
						 ->getManager()
						 ->getRepository('gdmBlogBundle:Article')
						 ->getArticles(3, $page);
		return $this->render('gdmBlogBundle:Blog:index.html.twig',array(
				'articles' => $articles,
				'page' => $page,
				'coms' => '',
				'nombrePage' => ceil(count($articles)/3)
		));
	}
	public function voirAction(Article $article)
	{
		/*// On récupère le repository
		$em = $this->getDoctrine()->getManager();
		$art = $em->getRepository('gdmBlogBundle:Article');
		// On récupère l'entité correspondant à l'id $id
		$article = $art->find($id);
		// $article est donc une instance de gdsm\BlogBundle\Entity\Article
		// Ou null si aucun article n'a été trouvé avec l'id $id
		if($article === null)
		{
			throw $this->createNotFoundException('Article[id='.$id.']inexistant.');
		}
		// On récupère la liste des commentaires
		$liste_commentaires = $em->getRepository('gdmBlogBundle:Commentaire')->findAll();
		return $this->render('gdmBlogBundle:Blog:voir.html.twig', array('article' => $article,'liste_commentaires' => $liste_commentaires));*/
		$coms = $this->getDoctrine()->getManager()
				->getRepository('gdmBlogBundle:Commentaire')
				->findByArticle($article->getId());
		return $this->render('gdmBlogBundle:Blog:voir.html.twig', array('article' => $article,'coms' => $coms));
	}
	public function ajouterAction()
	{
		/*$this->get('session')->getFlashBag()->add('info', 'Article bien	enregistré');
		$this->get('session')->getFlashBag()->add('info', 'Oui oui, il est bien enregistré !');
		return $this->redirect( $this->generateUrl('gdmblog_voir',array('id' => 5)) );
		if( $this->get('request')->getMethod() == 'POST' )
		{
			$this->get('session')->getFlashBag()->add('notice', 'Article bien enregistré');
			return $this->redirect( $this->generateUrl('gdmlblog_voir',array('id' => 5)) );
		}
		return $this->render('gdmBlogBundle:Blog:ajouter.html.twig');
		// Création de l'entité Article
		$article = new Article();
		$article->setTitre('Mon dernier sabotsy');
		$article->setContenu("reveko mintsy iny a.");
		$article->setAuteur('toky');

		// Création d'un premier commentaire
		$commentaire1 = new Commentaire();
		$commentaire1->setAuteur('winzou');
		$commentaire1->setContenu('On veut les photos !');
		// Création d'un deuxième commentaire, par exemple
		$commentaire2 = new Commentaire();
		$commentaire2->setAuteur('Choupy');
		$commentaire2->setContenu('Les photos arrivent !');

		// On lie les commentaires à l'article
		$commentaire1->setArticle($article);
		$commentaire2->setArticle($article);

		// Création de l'entité Image
		$image = new Image();
		$image->setUrl('http://localhost/Symfony/web/images/logo.png');
		$image->setAlt('Logo win8');

		// On lie l'image à l'article
		$article->setImage($image);
		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();
		// Étape 1 : on persiste les entités
		$em->persist($article);
		// Étape 1 bis : si on n'avait pas défini le cascade={"persist"}, on devrait persister à la main l'entité $image
		// $em->persist($image);

		// On doit donc tout persister à la main ici
		$em->persist($commentaire1);
		$em->persist($commentaire2);
		// Étape 2 : on déclenche l'enregistrement
		$em->flush();
		// Reste de la méthode qu'on avait déjà écrit
		if ($this->getRequest()->getMethod() == 'POST')
		{
			$this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
			return $this->redirect( $this->generateUrl('gdmblog_voir',array('id' => $article->getId())) );
		}
		return $this->render('gdmBlogBundle:Blog:ajouter.html.twig');*/

		/* La gestion d'un formulaire est particulière, mais l'idée est	la suivante :
		if ($this->get('request')->getMethod() == 'POST') {
			// Ici, on s'occupera de la création et de la gestion du formulaire
			$this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
			// Puis on redirige vers la page de visualisation de cet article
			return $this->redirect( $this->generateUrl('gdmblog_voir',array('id' => 1)) );
		}
		// Si on n'est pas en POST, alors on affiche le formulaire
		return $this->render('gdmBlogBundle:Blog:ajouter.html.twig');*/
		// On teste que l'utilisateur dispose bien du rôle ROLE_AUTEUR
		if (!$this->get('security.context')->isGranted('ROLE_AUTEUR'))
		{
			// Sinon on déclenche une exception « Accès interdit »
			throw new AccessDeniedHttpException('Accès limité aux auteurs');
		}

		// On crée un objet Article
		$article = new Article();
		$form = $this->createForm(new ArticleType, $article);

		// On crée le FormBuilder grâce à la méthode du contrôleur
		// On ajoute les champs de l'entité que l'on veut à notre formulaire
		/*$form = $this->createFormBuilder($article)
				->add('date', 'date')
				->add('titre', 'text')
				->add('contenu', 'textarea')
				->add('auteur', 'text')
				->add('publication', 'checkbox',array('required' =>false))
				->getForm();*/
		// On récupère la requête
		$request = $this->getRequest();
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);
			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans leprochain chapitre)
			if ($form->isValid())
			{
				// On l'enregistre notre objet $article dans la base de	données
				$em = $this->getDoctrine()->getManager();
				//$article->getImage()->upload();
				$em->persist($article);
				$em->flush();
				$this->get('session')->getFlashBag()->add('info', 'Article bien ajouté');
				// On redirige vers la page de visualisation de l'article nouvellement créé
				return $this->redirect($this->generateUrl('gdmblog_voir',array('id' => $article->getId())));
			}
		}
		// À ce stade :
		// - Soit la requête est de type GET, donc le visiteur vien	d'arriver sur la page et veut voir le formulaire
		// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
		return $this->render('gdmBlogBundle:Blog:ajouter.html.twig',array('form' => $form->createView(),));
	}
	public function CommentaireAction($id)
	{
		$coms = new Commentaire;
		$form = $this->createForm(new CommentaireType, $coms);

		$em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('gdm\BlogBundle\Entity\Article')->find($id);
		$coms->setArticle($article);

		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$em->persist($coms);
				$em->flush();
				return $this->redirect($this->generateUrl('gdmblog_voir', array('id' => $id)));
			}
		}
		return $this->render('gdmBlogBundle:Blog:ajouter.html.twig',array('form' => $form->createView(),));
	}
	public function modifierAction($id)
	{
		/*$em = $this->getDoctrine()->getManager();
		// On récupère l'article
		$article = $em->getRepository('gdmBlogBundle:Article')->find($id);
		// On modifie l'URL de l'image par exemple
		$article->setContenu('andrana farany de matory');
		// On n'a pas besoin de persister notre article (si vous lefaites, aucune erreur n'est déclenchée, Doctrine l'ignore)
		// Rappelez-vous, il l'est automatiquement car on l'a récupérédepuis Doctrine
		// Pas non plus besoin de persister l'image ici, car elle estégalement récupérée par Doctrine
		// On déclenche la modification
		$em->flush();
		return new Response('OK');

		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getEntityManager();
		// On récupère l'entité correspondant à l'id $id
		$article = $em->getRepository('gdmBlogBundle:Article')->find($id);*/
		// Si l'article n'existe pas, on affiche une erreur 404


		// Récupération d'un article déjà existant, d'id $id.
		$em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('gdm\BlogBundle\Entity\Article')->find($id);
		// Et on construit le formBuilder avec cette instance d'article,comme précédemment
		$form = $this->createForm(new ArticleEditType, $article);
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				if ($article == null)
				{
					throw $this->createNotFoundException('Article[id=' . $id . ']inexistant');
				}
				// Ici, on s'occupera de la création et de la gestion du formulaire
				$em->flush();
				return $this->redirect($this->generateUrl('gdmblog_voir',array('id' => $article->getId())));
			}
		}
		return $this->render('gdmBlogBundle:Blog:modifier.html.twig', array('article' => $article, 'form' => $form->createView(),));
	}
	// Suppression des catégories d'un article :
	public function supprimerAction(Article $article)
	{
		/*// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();
		// On récupère l'entité correspondant à l'id $id
		$article = $em->getRepository('gdmBlogBundle:Article')->find($id);
		if ($article === null) {
			throw $this->createNotFoundException('Article[id='.$id.']inexistant.');
		}
		// On récupère toutes les catégories :
		$liste_categories = $em->getRepository('gdmBlogBundle:Categorie')->findAll();
		// On enlève toutes ces catégories de l'article
		foreach($liste_categories as $categorie)
		{
			// On fait appel à la méthode removeCategorie() dont on a parlé plus haut
			// Attention ici, $categorie est bien une instance de Categorie, et pas seulement un id
			$article->removeCategorie($categorie);
		}
		// On n'a pas modifié les catégories : inutile de les persister
		// On a modifié la relation Article - Categorie
		// Il faudrait persister l'entité propriétaire pour persister larelation
		// Or l'article a été récupéré depuis Doctrine, inutile de lepersister
		// On déclenche la modification
		$em->flush();
		return new Response('OK');

		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getEntityManager();
		// On récupère l'entité correspondant à l'id $id
		$article = $em->getRepository('gdmBlogBundle:Article')->find($id);
		// Si l'article n'existe pas, on affiche une erreur 404
		if ($article == null) {
			throw $this->createNotFoundException('Article[id='.$id.']inexistant');
		}
		if ($this->get('request')->getMethod() == 'POST') {
			// Si la requête est en POST, on supprimera l'article
			$this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');
			// Puis on redirige vers l'accueil
			return $this->redirect( $this->generateUrl('gdmblog_accueil'));
		}
		// Si la requête est en GET, on affiche une page de	confirmation avant de supprimer
		return $this->render('gdmBlogBundle:Blog:supprimer.html.twig',array('article' => $article));*/

		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'article contre cette faille
		$form = $this->createFormBuilder()->getForm();
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				// On supprime l'article
				$em = $this->getDoctrine()->getManager();
				$em->remove($article);
				$em->flush();
				// On définit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');
				// Puis on redirige vers l'accueil
				return $this->redirect($this->generateUrl('gdmblog_accueil'));
			}
		}
		// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
		return $this->render('gdmBlogBundle:Blog:supprimer.html.twig',array('article' => $article,'form' => $form->createView()));
	}
	public function voirSlugAction($slug, $annee, $format)
	{
	return new Response("On pourrait afficher l'article	correspondant au slug '".$slug."', créé en ".$annee." et au format	".$format.".");
	}
	public function menuAction()
	{
		/*$liste = array(
			array('id' => 2, 'titre' => 'Mon dernier weekend !'),
			array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
			array('id' => 9, 'titre' => 'Petit test')
		);
		return $this->render('gdmBlogBundle:Blog:menu.html.twig', array('liste_articles' => $liste));*/
		$liste = $this->getDoctrine()->getManager()	->getRepository('gdmBlogBundle:Article')
									 ->findBy(
												array(), // Pas de critère
												array('date' => 'desc'),0);
		return $this->render('gdmBlogBundle:Blog:menu.html.twig', array('liste_articles' => $liste));
	}
	public function testAction()
	{
		$article = new Article;
		$article->setDate(new \Datetime()); // Champ « date » OK
		$article->setTitre('abc'); // Champ « titre » incorrect : moins de 10 caractères
		//$article->setContenu('blabla'); // Champ « contenu » incorrect: on ne le définit pas
		$article->setAuteur('A'); // Champ « auteur »incorrect : moins de 2 caractères
		// On récupère le service validator
		$validator = $this->get('validator');
		// On déclenche la validation
		$liste_erreurs = $validator->validate($article);
		// Si le tableau n'est pas vide, on affiche les erreurs
		if(count($liste_erreurs) > 0)
		{
			return new Response(print_r($liste_erreurs, true));
		}
		else
		{
			return new Response("L'article est valide !");
		}
	}
	public function traductionAction($name)
	{
		return $this->render('gdmBlogBundle:Blog:traduction.html.twig',array('name' => $name));
	}
}