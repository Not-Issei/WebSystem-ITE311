<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Migrations extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Enable/Disable Migrations
     * --------------------------------------------------------------------------
     *
     * Migrations are enabled by default.
     *
     * You should enable migrations whenever you intend to do a schema migration
     * and disable it back when you're done.
     */
    public bool $enabled = true; // Enable migrations

    /**
     * --------------------------------------------------------------------------
     * Migration Type
     * --------------------------------------------------------------------------
     *
     * 'sequential' - Sequential numbering (001, 002, etc.)
     * 'timestamp'  - Timestamp-based (2023-08-16-153000)
     */
    public string $type = 'sequential'; // Use sequential numbering

    /**
     * --------------------------------------------------------------------------
     * Migrations Table
     * --------------------------------------------------------------------------
     *
     * This is the name of the table that will store the current migrations state.
     * When migrations run, it will store in this table which migration
     * files have already been executed.
     */
    public string $table = 'migrations';

    /**
     * --------------------------------------------------------------------------
     * Timestamp Format
     * --------------------------------------------------------------------------
     *
     * This is the format that will be used when creating new migrations
     * using the CLI command:
     *   > php spark make:migration
     *
     * Supported formats:
     * - YmdHis_
     * - Y-m-d-His_
     * - Y_m_d_His_
     */
    public string $timestampFormat = 'Y-m-d-His_';
}
