<?php

use Latte\Runtime as LR;

/** source: D:\xampp\htdocs\www\autoservis\app\Presenters/templates/Majitele/majitele.latte */
final class Template3fd2b5d6b1 extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['m' => '23'], $this->params) as $ʟ_v => $ʟ_l) {
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
    <table class="table table-striped table-bordered" style="margin-top:1%;">

        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Jméno</th>
                <th scope="col">Příjmení</th>
                <th scope="col">Adresa</th>
                <th scope="col">Telefon</th>
                <th scope="col">e-mail</th>
                <th scope="col">Editovat</th>
                <th scope="col">Smazat</th>
            </tr>
        </thead>

        <tbody>
        <tr>
';
		$iterations = 0;
		foreach ($autoservis as $m) /* line 23 */ {
			echo '        
    <td>';
			echo LR\Filters::escapeHtmlText($m->id) /* line 25 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($m->jmeno) /* line 26 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($m->prijmeni) /* line 27 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($m->adresa) /* line 28 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($m->telefon) /* line 29 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($m->email) /* line 30 */;
			echo '</td>
    <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("edit", [$m->id])) /* line 31 */;
			echo '">edit</a></td>
    <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("delete", [$m->id])) /* line 32 */;
			echo '">delete</a></td>
        </tr>
';
			$iterations++;
		}
		echo '
        </tbody>
    </table>
  </div>
  </div>
    </div>';
	}

}
