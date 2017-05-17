<?php
/**
 * Created by PhpStorm.
 * User: Maheritiana
 * Date: 15/05/2017
 * Time: 16:39
 */

namespace gdm\BlogBundle\Controller;




class ArticleController
{
    public function voirAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->find('gdm\BlogBundle\Entity\Article', $id);
        if (null !== $article) {
            throw $this->createNotFoundException('L\'article demandé [id='.$id.'] n\'existe pas.');
        }
        // Ici seulement votre vrai code…
        return $this->render('gdmBlogBundle:Blog:voir.html.twig',array('article' => $article));
    }
}