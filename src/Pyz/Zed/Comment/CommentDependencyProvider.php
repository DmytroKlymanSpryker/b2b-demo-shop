<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Comment;

use Spryker\Zed\Comment\CommentDependencyProvider as SprykerCommentDependencyProvider;

class CommentDependencyProvider extends SprykerCommentDependencyProvider
{
    /**
     * @return array
     */
    public function getCommentValidatorPlugins() : array
    {
        return [
            new Spryker\Zed\Quote\Communication\Plugins\Comment\QuoteCommentValidatorPlugin(),
        ];
    }
}