<?php

use Latte\Runtime as LR;

/** source: D:\xampp\htdocs\www\autoservis\app\Presenters/templates/@layout.latte */
final class Templateafdfbaafcc extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['scripts' => 'blockScripts'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 7 */;
		echo '/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 8 */;
		echo '/css/style.css" rel="stylesheet" type="text/css">
	<title>';
		if ($this->hasBlock("title")) /* line 9 */ {
			$this->renderBlock($ʟ_nm = 'title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('striphtml', $ʟ_fi, $s));
			}) /* line 9 */;
			echo ' | ';
		}
		echo 'Nette Web</title>
</head>

<body>
';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 13 */ {
			echo '	<div';
			echo ($ʟ_tmp = array_filter(['flash', $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 13 */;
			echo '>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 13 */;
			echo '</div>
';
			$iterations++;
		}
		echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 16 */;
		echo '">Autoservis</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
';
		if ($user->isLoggedIn()) /* line 23 */ {
			echo '          <a class="nav-link" aria-current="page" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 23 */;
			echo '">Automobily</a>
';
		}
		echo '        </li>
        <li class="nav-item">
';
		if ($user->isLoggedIn()) /* line 26 */ {
			echo '          <a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Majitele:majitele")) /* line 26 */;
			echo '">Majitelé</a>
';
		}
		echo '        </li>
        <li class="nav-item">
';
		if ($user->isLoggedIn()) /* line 29 */ {
			echo '          <a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Opravy:opravy")) /* line 29 */;
			echo '">Opravy</a>
';
		}
		echo '        </li>
        <li class="nav-item">
';
		if ($user->isLoggedIn()) /* line 32 */ {
			echo '          <a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Soucastky:soucastky")) /* line 32 */;
			echo '">Součástky</a>
';
		}
		echo '        </li>
        <li class="nav-item">
';
		if ($user->isLoggedIn()) /* line 35 */ {
			echo '          <a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("TypVozu:typvozu")) /* line 35 */;
			echo '">Typ vozu</a>
';
		}
		echo '        </li>
        <li class="nav-item">
';
		if ($user->isLoggedIn()) /* line 38 */ {
			echo '          <a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Zamestnanci:Zamestnanci")) /* line 38 */;
			echo '">Zaměstnanci</a>
';
		}
		echo '        </li>
        <li class="nav-item">
';
		if (!$user->isLoggedIn()) /* line 41 */ {
			echo '          <a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:in")) /* line 41 */;
			echo '">Přihlásit se</a>
';
		}
		echo '        </li>
        <li class="nav-item">
';
		if ($user->isLoggedIn()) /* line 44 */ {
			echo '          <a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:out")) /* line 44 */;
			echo '">Odhlásit se</a>
';
		}
		echo '        </li>
      </ul>
    </div>
  </div>
</nav>
';
		$this->renderBlock($ʟ_nm = 'content', [], 'html') /* line 50 */;
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('scripts', get_defined_vars()) /* line 51 */;
		echo '
</body>
</html>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '13'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block scripts} on line 51 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '	<script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
';
	}

}
