# migrate_process_plugin_xml
This is a plugin for the Migrate module that will process a single field that contains XML.

## Usage Example
```
  field_first_name:
    plugin: get
    source: xmldata
    data_parser_plugin: xml
    selector: /FirstName
```
