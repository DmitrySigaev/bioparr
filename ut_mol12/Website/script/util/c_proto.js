
if (!window.util)
    util = {};

String.prototype.strip = function() {
   return this.replace(/^\s+/,"").replace(/\s+$/,"");
};
