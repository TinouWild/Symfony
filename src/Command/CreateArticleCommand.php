<?php
/**
 * Created by PhpStorm.
 * User: etienne
 * Date: 19/03/19
 * Time: 14:00
 */

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateArticleCommand extends Command
{
    protected static $defaultName = 'app:create-article';

    public function __construct()
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Create an article')
            ->setHelp('This command allows you to create an article ...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Article Creator',
            '===============',
            '',
        ]);
        $output->writeln([
            '<info>Texte informatif en vert</info>',
            '<comment>Commentaire en jaune</comment>',
            '<question>Texte noir sur fond cyan</question>',
            '<error>Erreur en rouge</error>',
            '',
        ]);

        // Il est également possible de mettre en forme de manière perso de deux façons :
        // 1 - En utilisant OutputFormatterStyle :
        $outputStyle = new OutputFormatterStyle('red', 'yellow', ['bold', 'blink']);
        $output->getFormatter()->setStyle('fire', $outputStyle);

        $output->writeln('<fire>foo</fire>');

        // 2 - En ajoutant directement dans le code :
        // bold text with underscore
        $output->writeln('<options=bold,underscore>foo</>');

        $output->writeln('Article created !');
    }
}