<?php

return [

    'navigation' => [
        'group'  => 'Court Management',
        'label'  => 'Pricing Tier',
        'plural' => 'Pricing Tiers',
    ],

    'sections' => [
        'information'      => 'Pricing Tier Information',
        'information_desc' => 'Define pricing tiers for courts (e.g. Standard, Member Rate, Guest Rate)',
        'pricing'          => 'Pricing & Capacity',
        'pricing_desc'     => 'Set price and available quantity',
        'sale_period'      => 'Sale Period',
        'sale_period_desc' => 'Optional: Restrict when this pricing tier can be purchased',
        'status'           => 'Status & Settings',
        'dependency'       => 'Pricing Dependency',
        'dependency_desc'  => 'Optional: Require another pricing tier to be selected before this one can be booked',
        'sales_overview'   => 'Sales Overview',
        'sales_overview_desc' => 'View current sales and availability',
    ],

    'fields' => [
        'event'                      => 'Football Court',
        'event_helper'               => 'Select the court for this pricing tier',
        'name_en'                    => 'Name (English)',
        'name_en_helper'             => 'Enter the pricing tier name in English',
        'name_ar'                    => 'Name (Arabic)',
        'name_ar_helper'             => 'Enter the pricing tier name in Arabic',
        'description_en'             => 'Description (English)',
        'description_ar'             => 'Description (Arabic)',
        'price'                      => 'Price',
        'price_helper'               => 'Set the price in OMR',
        'quantity_available'         => 'Quantity Available',
        'quantity_available_helper'  => 'Total bookings available',
        'quantity_sold'              => 'Quantity Sold',
        'quantity_sold_helper'       => 'Auto-updated on bookings',
        'sale_start_date'            => 'Sale Start Date',
        'sale_start_helper'          => 'Leave empty for no restriction',
        'sale_end_date'              => 'Sale End Date',
        'sale_end_helper'            => 'Leave empty for no restriction',
        'is_active'                  => 'Active',
        'is_active_helper'           => 'Only active pricing tiers are available for booking',
        'depends_on'                 => 'Depends On',
        'depends_on_helper'          => 'Bookers must select this parent pricing tier before they can add the current one',
        'depends_on_placeholder'     => 'None (standalone)',
    ],

    'placeholders' => [
        'name_en'        => 'e.g., Standard, Member Rate, Guest Rate',
        'name_ar'        => 'مثال: عادي، سعر الأعضاء، سعر الزوار',
        'description_en' => 'Describe what this booking includes...',
        'description_ar' => 'اشرح ما يتضمنه هذا الحجز...',
    ],

    'create_event_form' => [
        'title_en'  => 'Title (English)',
        'title_ar'  => 'Title (Arabic)',
        'draft'     => 'Draft',
        'published' => 'Published',
    ],

    'sale_period_status' => [
        'always_available'  => '✓ Always available for booking',
        'not_yet'           => '⚠ Not yet available (starts :date)',
        'ended'             => '✗ Sale period ended (:date)',
        'currently'         => '✓ Currently available for booking',
        'pending'           => 'Sale period settings will apply after creating the pricing tier.',
    ],

    'sales_info' => [
        'pending'           => 'Sales information will be available after creating the pricing tier.',
        'sold'              => 'Sold',
        'available'         => 'Available',
        'total'             => 'Total',
        'sales_progress'    => 'Sales Progress',
        'revenue_generated' => 'Revenue Generated',
        'potential_revenue' => 'Potential Revenue',
    ],

    'columns' => [
        'event'       => 'Football Court',
        'name'        => 'Pricing Tier',
        'price'       => 'Price',
        'total'       => 'Total',
        'sold'        => 'Sold',
        'available'   => 'Available',
        'sold_pct'    => 'Sold %',
        'revenue'     => 'Revenue',
        'status'      => 'Status',
        'sale_period' => 'Sale Period',
        'depends_on'  => 'Depends On',
        'bookings'    => 'Bookings',
        'created_at'  => 'Created At',
        'updated_at'  => 'Updated At',
    ],

    'sale_period_column' => [
        'always'    => 'Always',
        'from'      => 'From :date',
        'until'     => 'Until :date',
    ],

    'filters' => [
        'by_event'         => 'Filter by Court',
        'status'           => 'Status',
        'status_all'       => 'All pricing tiers',
        'status_active'    => 'Active only',
        'status_inactive'  => 'Inactive only',
        'availability'     => 'Availability',
        'availability_show'=> 'Show',
        'avail_available'  => 'Available bookings',
        'avail_sold_out'   => 'Sold out',
        'avail_almost'     => 'Almost sold out (>80%)',
        'avail_low'        => 'Low stock (<50 remaining)',
        'ind_available'    => 'Available bookings only',
        'ind_sold_out'     => 'Sold out only',
        'ind_almost'       => 'Almost sold out (>80%)',
        'ind_low'          => 'Low stock (<50 remaining)',
        'price_range'      => 'Price Range',
        'price_from'       => 'From',
        'price_to'         => 'To',
        'ind_price_from'   => 'Price from: $:amount',
        'ind_price_to'     => 'Price to: $:amount',
    ],

    'actions' => [
        'new'                 => 'New Pricing Tier',
        'deactivate'          => 'Deactivate',
        'activate'            => 'Activate',
        'activate_selected'   => 'Activate Selected',
        'deactivate_selected' => 'Deactivate Selected',
        'create_first'        => 'Create first pricing tier',
    ],

    'modals' => [
        'deactivate_heading'     => 'Deactivate Pricing Tier',
        'activate_heading'       => 'Activate Pricing Tier',
        'deactivate_description' => 'This pricing tier will not be available for booking.',
        'activate_description'   => 'This pricing tier will be available for booking.',
    ],

    'empty_state' => [
        'heading'     => 'No pricing tiers yet',
        'description' => 'Create pricing tiers for your courts to enable bookings.',
    ],

    'notifications' => [
        'status_updated'        => 'Status updated',
        'type_activated'        => 'Pricing tier activated',
        'type_deactivated'      => 'Pricing tier deactivated',
        'types_activated'       => 'Pricing tiers activated',
        'types_deactivated'     => 'Pricing tiers deactivated',
        'cannot_delete'         => 'Cannot delete',
        'has_bookings'          => 'This pricing tier has existing bookings.',
        'bulk_has_bookings'     => ':count pricing tier(s) have existing bookings.',
        'created'               => 'Pricing tier created successfully',
        'updated'               => 'Pricing tier updated successfully',
    ],

    'suffix' => [
        'tickets' => 'bookings',
        'sold'    => 'sold',
    ],

];
