<?php

/**
 * This is an example module with only the basic
 * setup necessary to get it working.
 *
 * @class SDRTUpcomginEventsModule
 */
class SDRTUpcomginEventsModule extends FLBuilderModule {

    /** 
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */  
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Upcoming Events', 'fl-builder'),
            'description'   => __('Show Upcoming Tutoring Events.', 'fl-builder'),
            'category'		=> __('SDRT Modules', 'fl-builder'),
            'dir'           => FL_MODULE_EXAMPLES_DIR . 'modules/upcoming-events/',
            'url'           => FL_MODULE_EXAMPLES_URL . 'modules/upcoming-events/',
        ));
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('SDRTUpcomginEventsModule', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Event Settings', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'select_field'   => array(
                        'type'          => 'select',
                        'label'         => __('Number of Events to Show', 'fl-builder'),
                        'default'       => 'option-2',
                        'options'       => array(
                            '1'      => __('1', 'fl-builder'),
                            '2'      => __('2', 'fl-builder'),
                            '3'      => __('3', 'fl-builder')
                        )
                    ),
                )
            )
        )
    )
));