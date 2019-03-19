<?php
/**
 * Created by PhpStorm.
 * User: etienne
 * Date: 19/03/19
 * Time: 14:00
 */

namespace App\Command;

use Symfony\Component\Console\Command\Command;
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

        $output->writeln('Article created !');
    }
}