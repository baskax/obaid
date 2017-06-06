<?php
// Routes

$app->add(new \Slim\Middleware\HttpBasicAuthentication([
      'path' => ['/toggle','/delete','/reset','/add'],
      'secure' => true,
      'users' => ['janusz' => '$2y$10$riuiaVIZUedeAo527iREN.r9G2jIjYS7ypewyWDrXuRzFP/kG8UBy'],
      'error' => function ($request, $response, $arguments) {
        $data = [];
        $data["status"] = "error";
        $data["message"] = $arguments["message"];
        $response = $response->withStatus(200);
        return $response->write(json_encode($data, JSON_UNESCAPED_SLASHES));
      }
]));

$app->get('/','\Obiad\Controller\Obiad:indexAction');
$app->get('/list','\Obiad\Controller\Obiad:listAction');
$app->get('/add','\Obiad\Controller\Obiad:addAction');
$app->post('/add','\Obiad\Controller\Obiad:addAction');
$app->get('/random','\Obiad\Controller\Obiad:pickAction');
$app->get('/toggle/{id}','\Obiad\Controller\Obiad:toggleAction')->setName('toggle');
$app->get('/delete/{id}','\Obiad\Controller\Obiad:deleteAction')->setName('delete');
$app->get('/reset','\Obiad\Controller\Obiad:resetAction');
