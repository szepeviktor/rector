<?php declare(strict_types=1);

namespace Rector\Contract\Rector;

use PhpParser\Node;
use PhpParser\NodeVisitor;

interface PhpRectorInterface extends NodeVisitor, RectorInterface
{
    /**
     * List of nodes this class checks, classes that implement @see \PhpParser\Node
     * @see beautifull map of all nodes https://github.com/rectorphp/rector/blob/master/docs/NodesOverview.md
     *
     * @return string[]
     */
    public function getNodeTypes(): array;

    /**
     * Process Node of matched type
     */
    public function refactor(Node $node): ?Node;
}
