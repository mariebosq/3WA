<?php

// Création d'une nouvelle ressource cURL

/**
 * Demande qu service de Stanford l'analyse lexicale d'un énoncé
 */
function getLexicalAnalysis($str, $language) {

  	$channel = curl_init();

	$params = [
  	'query' => $str,
  	'parserSelect' => $language,
 		'parse' => 'Parse'
	];

	// Paramétrer les options de la requête
	curl_setopt($channel, CURLOPT_URL, "http://nlp.stanford.edu:8080/parser/index.jsp");
	curl_setopt($channel, CURLOPT_HEADER, 0);
	curl_setopt($channel, CURLOPT_POST, true);
	curl_setopt($channel, CURLOPT_POSTFIELDS, http_build_query($params));
	curl_setopt($channel, CURLOPT_RETURNTRANSFER, true);

	// Récupération de l'URL et stockage dans la variable $result
	$result = curl_exec($channel);

  // Fermeture de la session cURL
	curl_close($channel);

  return $result;
}

/**
 * Renvoie la liste des mots analysés
 */
function getLexemes($htmlSource) {

		$pattern = '#<div style="padding-right: 1em; float: left; white-space: nowrap;">([^<]+)</div>#';
  	preg_match_all($pattern, $htmlSource, $matches);

  	return $matches[1];
}

/**
 * Renvoie la catégorie lexicale d'un mot donné (selon le format de l'analyseur de Stanford)
 */
function getCategory($lexeme) {
  $elements = explode('/', $lexeme);
  return $elements[1];

}
