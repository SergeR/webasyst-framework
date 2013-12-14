<?php
/**
 *
 * @author WebAsyst Team
 * @package wa-apps/stickies/api/v1
 */
class stickiesStickyGetListMethod extends stickiesAPIMethod
{

    public function execute()
    {
        $sheet_id = $this->get('sheet_id', true);
        $this->checkRights($sheet_id);

        $sticky_model = new stickiesStickyModel();
        $this->response = $sticky_model->getBySheetId($sheet_id);
        $this->response['_element'] = 'sticky';
    }
}
