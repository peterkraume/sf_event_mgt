﻿.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _registrationfield:

Registration field
==================

If the registration option is enabled for an event, you can use registration fields to add additional
fields to the default registration form.


.. figure:: ../../Images/event-registrationfields.png
   :align: left
   :alt: Registration fields

.. t3-field-list-table::
 :header-rows: 1

 - :Field:
         Field:

   :Description:
         Description:

 - :Field:
         Title

   :Description:
         Title of the field. Will be rendered as field label in the frontend

 - :Field:
         Type

   :Description:
         Type of the registration field

         Possible values:

          * Textfield (input)
          * Radiobutton
          * Checkbox
          * Textarea

 - :Field:
         Options

   :Description:
         Options for the type "Radiobutton" and "Checkbox".

         Example:

         Option 1|value1
         Option 2|value2

 - :Field:
         Required

   :Description:
         If checked, field must be filled out in frontend

 - :Field:
         Placeholder

   :Description:
         Placeholder for the field

 - :Field:
         Default vaoue

   :Description:
         The default value of the field
