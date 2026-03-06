<?php

$input = $request->get('name', 'World');

$response->setContent(
sprintf('OII %s', htmlspecialchars($input))
);