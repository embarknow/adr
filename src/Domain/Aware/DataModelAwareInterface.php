<?php

namespace Embark\Journey\Aware;

use Embark\Journey\Domain\DataModelInterface;

/**
 * Implementing classes can interact with DataModel instances
 */
interface DataModelAwareInterface
{
    /**
     * Set a data model instance
     *
     * @param DataModelInterface $dataModel
     *
     * @return self
     */
    public function setDataModel(DataModelInterface $dataModel);

    /**
     * Get a data model instance
     *
     * @return DataModelInterface
     */
    public function getDataModel();
}
