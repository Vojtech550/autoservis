<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use App\Model\Main_model;
use Nette\Database\Context;
use Nette\Application\UI\Form;
use Contributte\FormsBootstrap\BootstrapForm;

final class HomepagePresenter extends Nette\Application\UI\Presenter
{
	private $main_model;
    //private Nette\Database\Explorer $database;

	public function __construct(Main_model $main_model)
	{
		$this->main_model = $main_model;
	}
	public $database;

/*	public function __construct(Nette\Database\Explorer $database)
	{
		$this->database = $database;
	}
    public function renderDefault(): void
    { 
	    //$this->template->autoservis = $this->database->table('automobily')
		//->order('created_at DESC')
		//->limit(5);
		$this->template->autoservis = $this->database->query
		("
		SELECT * FROM `automobily` 
		JOIN typ_vozu ON typ_vozu.id = automobily.id
		JOIN majitele ON majitele.id = automobily.id
		JOIN soucastky ON soucastky.id = automobily.id
		JOIN opravy ON soucastky.id = opravy.id
		JOIN zamestnanci ON opravy.id = zamestnanci.id
		");
    } */
	public function renderDefault(): void
    {
        $this->template->autoservis = $this->database->table('automobily');
    }
	public function injectContext(Context $database)
	{
		$this->database = $database;
	}

	protected function createComponentPostForm(): Form
	{
		$form = new BootstrapForm;

		$form->addText('registranci_znacka', 'SPZ:')

			->setHtmlAttribute('rows', '4')
			->setHtmlAttribute('cols', '32')
			->setRequired();


		$form->addText('vyrobce', 'Výrobce:')
			->setHtmlAttribute('type', 'text')
			->setRequired();

		$form->addText('rok_vyroby', 'Rok výroby:')
			->setHtmlAttribute('type', 'text')
			->setRequired();
		$form->addText('barva', 'Barva:')
			->setHtmlAttribute('type', 'text')
			->setRequired();
		$form->addText('obsah_motoru', 'Obsah motoru:')
			->setHtmlAttribute('type', 'text')
			->setRequired();

		$form->addSubmit('send', 'Proveď')
			->setHtmlAttribute('class', 'button button3 btn-block col-lg-12 col-md-12 col-sm-12 btn_1')
			->setHtmlAttribute('id', 'submit');



		$form->onSuccess[] = [$this, 'PostFormSucceeded'];


		return $form;
	}
	public function PostFormSucceeded(Form $form, $values): void
	{
		$formId = $this->getParameter('formId');

		if ($formId) {
			$form = $this->database->table('automobily')->get($formId);
			$form->update($values);
			$this->redirect('automobily');
		} else {

			$forms = $this->database->table('automobily')->insert($values);


			$this->redirect('Majitele:majitele');
		}
	}
}
