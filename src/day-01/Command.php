<?php

declare(strict_types=1);

namespace AdventOfCode\Day1;

use Symfony\Component\Console\Command\Command as ConsoleCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class Command extends ConsoleCommand
{
    protected function configure()
    {
        $this->setName('day:01')
            ->setDescription('Day 1: Inverse Captcha')
            ->addArgument('input', InputArgument::REQUIRED, 'sequence of digits')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Inverse captcha: <info>%s</info>', InverseCaptcha::sum($input->getArgument('input'))));
    }
}
