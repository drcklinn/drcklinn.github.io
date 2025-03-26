<?php



$wgExtensionCredits['parserhook'][] = array(

  'name' => 'Raw HTML',

  'author' => 'drcklinn',

  'version' => '1.1',

  'description' => 'Adds <nowiki><raw></nowiki> tag to include arbitrary html',

  'url' => 'https://github.com/drcklinn/drcklinn.github.io/extensions'

);



$wgHooks['ParserFirstCallInit'][] = function( Parser &$parser ) {

  $parser->setHook("raw", function($input, $args) {

    return $input;

  });

  return true;

};
