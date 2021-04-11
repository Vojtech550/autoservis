<?php

use Latte\Runtime as LR;

/** source: D:\xampp\htdocs\www\autoservis\app\Presenters/templates/Homepage/default.latte */
final class Template440bc6caf2 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['aut' => '23'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->renderBlock($ʟ_nm = 'scripts', [], 'html') /* line 2 */;
		echo '            <div class="container">
';
		/* line 4 */ $_tmp = $this->global->uiControl->getComponent("postForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '            <div class="column">
    <table class="table table-striped table-bordered">

        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">SPZ</th>
                <th scope="col">Výrobce</th>
                <th scope="col">Rok Výroby</th>
                <th scope="col">Barva</th>
                <th scope="col">Obsah motoru</th>
                <th scope="col">Editovat</th>
                <th scope="col">Smazat</th>
            </tr>
        </thead>

        <tbody>
<tr>
';
		$iterations = 0;
		foreach ($autoservis as $aut) /* line 23 */ {
			echo '    
    <td>';
			echo LR\Filters::escapeHtmlText($aut->id) /* line 25 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($aut->registranci_znacka) /* line 26 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($aut->vyrobce) /* line 27 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($aut->rok_vyroby) /* line 28 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($aut->barva) /* line 29 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($aut->obsah_motoru) /* line 30 */;
			echo '</td>
    <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("edit", [$aut->id])) /* line 31 */;
			echo '">edit<i class="fas fa-edit"></i></a></td>
    <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("delete", [$aut->id])) /* line 32 */;
			echo '">delete<i class="fas fa-edit"></i></a></td>



        </tr>
';
			$iterations++;
		}
		echo '
        </tbody>
    </table>
    </div>
    </div>';
	}

}
