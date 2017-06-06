<?php

namespace Obiad\Controller;

use Obiad\Controller\Base;

class Obiad extends Base {

  public function pickAction($req,$res,$args) {
    $query = "SELECT * FROM obiad WHERE status = 1 AND picked_at >= CURRENT_DATE() ORDER BY picked_at DESC";
    $mealA = $this->getDB()->getRow($query);

    $query = "SELECT * FROM obiad WHERE status = 1 AND picked_at < NOW() - INTERVAL 1 WEEK ORDER BY RAND() LIMIT 1";
    $mealB = $this->getDB()->getRow($query);

    $query = "SELECT * FROM obiad WHERE status = 1 ORDER BY RAND() LIMIT 1";
    $mealC = $this->getDB()->getRow($query);

    $meal = $mealA ?: ($mealB ?: $mealC);

    if($meal) {
      $id = $meal['id'];
      $query = "UPDATE obiad SET picked_at=NOW() WHERE id='$id'";
      $this->getDB()->Execute($query);
    }

    $vars = ['meal' => $meal];
    return $this->getView()->render($res,'picked.html',$vars);
  }

  public function indexAction($req,$res) {
    return $this->getView()->render($res,'index.html');
  }

  public function listAction($req, $res)
  {
    $strQuery = "SELECT * FROM obiad;";
    $meals = $this->getDB()->getAll($strQuery);
    $vars = [
      'meals' => $meals
    ];
    return $this->getView()->render($res, 'list.html', $vars);
  }

  public function addAction($req, $res)
  {
    if ($req->isPost()) {
      $body = $req->getParsedBody();
      $name = $body['name'];
      $str = "INSERT INTO obiad (`name`,`status`) VALUES ('$name',1)";
      $result = $this->getDB()->Execute($str);
      if ($result) {
        $res = $res->withStatus(302)->withHeader('Location', '/list');
      } else {
        $res = $res->withStatus(302)->withHeader('Location', '/add');
      }
    } else {
      return $this->getView()->render($res, 'add.html');
    }
    return $res;
  }

  public function toggleAction($req,$res,$args) {
    $id = $args['id'];
    $strQuery="UPDATE `obiad` SET `status` = IF(`status` = 1, 0, 1) WHERE `id` = $id";
    $result = $this->getDB()->Execute($strQuery);
    $res = $res->withStatus(302)->withHeader('Location','/list');
    return $res;
  }

  public function deleteAction($req,$res,$args) {
    $id = $args['id'];
    $strQuery="DELETE FROM obiad WHERE `id` = $id";
    $result = $this->getDB()->Execute($strQuery);
    $res = $res->withStatus(302)->withHeader('Location','/list');
    return $res;
  }

  public function resetAction($req,$res) {
    $query = "UPDATE obiad SET picked_at = NULL";
    $this->getDB()->Execute($query);
    $res=$res->withStatus(302)->withHeader('Location','/list');
    return $res;
  }

}
