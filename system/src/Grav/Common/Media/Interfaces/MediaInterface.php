<?php
namespace Grav\Common\Media\Interfaces;

/**
 * Class implements media interface.
 */
interface MediaInterface
{
    /**
     * Gets the associated media collection.
     *
     * @return MediaCollectionInterface  Collection of associated media.
     */
    public function getMedia();

    /**
     * Get filesystem path to the associated media.
     *
     * @return string|null  Media path or null if the object doesn't have media folder.
     */
    public function getMediaFolder();

    /**
     * Get display order for the associated media.
     *
     * @return array Empty array means default ordering.
     */
    public function getMediaOrder();
}
