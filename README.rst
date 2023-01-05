.. role:: raw-latex(raw)
   :format: latex
..

TYPO3 extension patch_install_tool
==================================


Installation Requirement
------------------------

You must overwrite the TYPO3 Core file
typo3/sysext/install/Classes/ServiceProvider.php by the file
patch_install_tool/Patches/TYPO3/sysext/install/Classes/ServiceProvider.php.

What is does
------------

This extension makes it possible again to use all parts of the install tool in the same way 
as it has been possible in former versions of TYPO3.

E.g. the feature of class replacement (former XCLASS) by
`$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][...]` is made possible again.

History
-------

Since at least TYPO3 10 some functionalities of the former TYPO3 backend have been moved into 
backend administration part of the install tool. Internally a redirect to the install tool PHP file is executed. This leads to a different behavior than before this change.
Some global variables are not set any more in some parts of the TYPO3 install tool. This happens 
because the files ext_localconf.php of the extensions are sometimes not executed any more for the install tool.
A redirect to the install tool is executed here and some other places:

::

    \TYPO3\CMS\Install\Controller\BackendModuleController::setAuthorizedAndRedirect

See isssue #99434 for more details. 


