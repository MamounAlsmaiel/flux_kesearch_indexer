# flux_kesearch_indexer
KeSearch Indexer for Flux Elements

This extension extends the two standard ke_search indexers (pages and content records) so that flux elements can be indexed.
All you have to do is insert the CType of your element (extensionname_templatename) in the "Content element types to be indexed" field in your Indexer Configuration.

## Configuration
If you want to index certain fields, you can add the following configuration to your typoscript.
If you don't, the indexer indexes all fields (not recommended).

plugin.tx_flux_kesearch_indexer{
  config{
    elements{
      yourElement1{
        fields = fieldName1,fieldName2,fieldName3,...
      }
      yourElement2{
        fields = fieldName1,fieldName2,fieldName3,...
      }
   }
 }

