<?php defined('BASEPATH') || exit('No direct script access allowed');
/**
 * KnowledgeDesk
 *
 * @package   KnowledgeDesk
 * @author    KnowledgeDesk Dev Team
 * @copyright Copyright (c) 2015, KnowledgeDesk Dev Team
 * @license   http://opensource.org/licenses/MIT    MIT License
 * @link      http://knowledgedesk.com
 * @since     Version 1.0
 * @filesource
 */

if (! function_exists('quiz_get_nextquestion')) {
	function quiz_get_nextquestion($quizid, $num, $question_model)
	{
		$quizquestion = $question_model->where('quiz_id', $quizid)->find_by('num', $num);
		return $quizquestion;
  }

if (! function_exists('quiz_getNextDifficuly')) {
	function quiz_getNextDifficuly($quizid, $userid='')
	{
		$quizquestion = $question_model->where('quiz_id', $quizid)->find_by('num', $num);
		return $quizquestion;
  }
}

}