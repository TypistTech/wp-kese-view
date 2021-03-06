<?php
/**
 * WP Kses View
 *
 * Safely rendering for WordPress, the OOP way.
 *
 * @package   TypistTech\WPKsesView
 *
 * @author    Typist Tech <wp-kses-view@typist.tech>
 * @copyright 2017 Typist Tech
 * @license   GPL-2.0+
 *
 * @see       https://typist.tech/projects/wp-kses-view
 * @see       https://github.com/TypistTech/wp-kses-view
 */

declare(strict_types=1);

namespace TypistTech\WPKsesView;

use Closure;

final class NullView implements ViewInterface
{
    /**
     * Echo the view safely with self as context object.
     *
     * @param mixed $context Optional. Context object for which to render the view.
     *
     * @return void
     */
    public function render($context = null)
    {
        // Do nothing.
    }

    /**
     * Convert the view to safe HTML.
     *
     * @param mixed $context Optional. Context object for which to render the view.
     *
     * @return string
     */
    public function toHtml($context = null): string
    {
        return '';
    }

    /**
     * Returns a closure which render the view.
     *
     * @param mixed|null $context Optional. Context object for which to render the view.
     *
     * @return Closure
     */
    public function getRenderClosure($context = null): Closure
    {
        // Do nothing.
        return function (): void {
        };
    }
}
