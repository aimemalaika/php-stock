<?php

namespace Dompdf;

use Dompdf\Css\Style;
use Dompdf\Frame\FrameList;

/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */

/**
 * The main Frame class
 *
 * This class represents a single HTML element.  This class stores
 * positioning information as well as containing block location and
 * dimensions. Style information for the element is stored in a {@link
 * Style} object. Tree structure is maintained via the parent & children
 * links.
 *
 * @package dompdf
 */
class Frame
{
    const WS_TEXT = 1;
    const WS_SPACE = 2;

    /**
     * The DOMElement or DOMText object this frame represents
     *
     * @var \DOMElement|\DOMText
     */
    protected $_node;

    /**
     * Unique identifier for this frame.  Used to reference this frame
     * via the node.
     *
     * @var string
     */
    protected $_id;

    /**
     * Unique id counter
     */
    public static $ID_COUNTER = 0; /*protected*/

    /**
     * This frame's calculated style
     *
     * @var Style
     */
    protected $_style;

    /**
     * This frame's original style.  Needed for cases where frames are
     * split across pages.
     *
     * @var Style
     */
    protected $_original_style;

    /**
     * This frame's parent in the document tree.
     *
     * @var Frame
     */
    protected $_parent;

    /**
     * This frame's children
     *
     * @var Frame[]
     */
    protected $_frame_list;

    /**
     * This frame's first child.  All children are handled as a
     * doubly-linked list.
     *
     * @var Frame
     */
    protected $_first_child;

    /**
     * This frame's last child.
     *
     * @var Frame
     */
    protected $_last_child;

    /**
     * This frame's previous sibling in the document tree.
     *
     * @var Frame
     */
    protected $_prev_sibling;

    /**
     * This frame's next sibling in the document tree.
     *
     * @var Frame
     */
    protected $_next_sibling;

    /**
     * This frame's containing block (used in layout): array(x, y, w, h)
     *
     * @var float[]
     */
    protected $_containing_block;

    /**
     * Position on the page of the top-left corner of the margin box of
     * this frame: array(x,y)
     *
     * @var float[]
     */
    protected $_position;

    /**
     * Absolute opacity of this frame
     *
     * @var float
     */
    protected $_opacity;

    /**
     * This frame's decorator
     *
     * @var \Dompdf\FrameDecorator\AbstractFrameDecorator
     */
    protected $_decorator;

    /**
     * This frame's containing line box
     *
     * @var LineBox
     */
    protected $_containing_line;

 