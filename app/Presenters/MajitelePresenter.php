<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use App\Model\Main_model;
use Nette\Database\Context;
use Nette\Application\UI\Form;
use Contributte\FormsBootstrap\BootstrapForm;

final class MajitelePresenter extends Nette\Application\UI\Presenter
{
	private $main_model;

	public function __construct(Main_model $main_model)
	{
		$this->main_model = $main_model;
	}
	public $database;

	public function renderMajitele(): void
    {
        $this->template->autoservis = $this->database->table('majitele');
    }
	public function injectContext(Context $database)
	{
		$this->database = $database;
	}

	protected function createComponentPostForm(): Form
	{
		$form = new BootstrapForm;

		$form->addText('jmeno', 'Jméno:')
			->setHtmlAttribute('rows', '4')
			->setHtmlAttribute('cols', '32')
			->setRequired();

		$form->addText('prijmeni', 'Příjmení:')
			->setHtmlAttribute('type', 'text')
			->setRequired();

		$form->addText('adresa', 'Adresa:')
			->setHtmlAttribute('type', 'text')
			->setRequired();

		$form->addText('telefon', 'Telefon:')
			->setHtmlAttribute('type', 'text')
			->setRequired();

		$form->addEmail('email', 'E-mail:')
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
			$form = $this->database->table('majitele')->get($formId);
			$form->update($values);
			$this->redirect('majitele');
		} else {

			$forms = $this->database->table('majitele')->insert($values);


			$this->redirect('majitele');
		}
	}
	
}
