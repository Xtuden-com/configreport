<?php
/**
 * @copyright Copyright (c) 2016, ownCloud GmbH.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 */

namespace OCA\ConfigReport\Command;

use OCA\ConfigReport\Report\ReportDataCollector;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ConfigReport extends Command {

	public function __construct() {

		parent::__construct();
	}

	protected function configure() {
		$this
			->setName('configreport:generate')
			->setDescription('generates a configreport');
	}

	protected function execute(InputInterface $input, OutputInterface $output) {
		$reportDataCollector = new ReportDataCollector();
		$output->writeln($reportDataCollector->getReportJson());
	}
}