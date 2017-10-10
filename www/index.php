<?php
/**
 * Please write the service where the user can enter any word and get the list of PHP and JavaScript repositories from GitHub where the entered word is mentioned in the name. Each repository in the list should be represented as the link to repository on GitHub.
 */
require_once(dirname(dirname(__FILE__)) . '/bootstrap.php');

require_once("template/header.html");

if (isset($_GET['query'])) {
    $query = $_GET['query'];

    $client = new \Github\Client();
    /** @var $api_search \Github\Api\Search*/
    $api_search = $client->api('search');

    $result = [];

    $repo_list = $api_search->repositories($query . ' in:name language:php');
    $result = array_merge($result, $repo_list['items']);

    $repo_list = $api_search->repositories($query . ' in:name language:javascript');
    $result = array_merge($result, $repo_list['items']);

    require_once('template/result.php');
} else {
    require_once('template/input.html');
}

require_once("template/footer.html");