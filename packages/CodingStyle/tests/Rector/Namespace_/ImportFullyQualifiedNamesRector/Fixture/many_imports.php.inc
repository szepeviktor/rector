<?php

namespace Rector\CodingStyle\Tests\Rector\Namespace_\ImportFullyQualifiedNamesRector\Source;

final class StockRepository
{
    public function filter(Stock\Query $query)
    {
        /** @var Stock\Query $query */
        $query = 5;

        if (!($query instanceof Stock\Querying\Query)) {
            throw new \InvalidArgumentException('Wrong query provided');
        }

        /** @var Querying\Query $query */
        $builder = $this->createBuilder();
        $query->build($builder);
    }

    public function multiDoc()
    {
        /** @var \Doctrine\DBAL\Connection $connection */
        $connection = $this->registry->getConnection();

        /** @var \Doctrine\DBAL\Connection $connection */
        $connection = $this->registry->getConnection();
    }
}

?>
-----
<?php

namespace Rector\CodingStyle\Tests\Rector\Namespace_\ImportFullyQualifiedNamesRector\Source;

use Rector\CodingStyle\Tests\Rector\Namespace_\ImportFullyQualifiedNamesRector\Source\Stock\Query;
use Doctrine\DBAL\Connection;
final class StockRepository
{
    public function filter(Query $query)
    {
        /** @var Query $query */
        $query = 5;

        if (!($query instanceof Stock\Querying\Query)) {
            throw new \InvalidArgumentException('Wrong query provided');
        }

        /** @var Querying\Query $query */
        $builder = $this->createBuilder();
        $query->build($builder);
    }

    public function multiDoc()
    {
        /** @var Connection $connection */
        $connection = $this->registry->getConnection();

        /** @var Connection $connection */
        $connection = $this->registry->getConnection();
    }
}

?>
