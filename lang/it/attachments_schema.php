<?php

<<<<<<< HEAD
return array (
  'fields' => 
  array (
    'invoice' => 
    array (
=======
return  [
  'fields' => 
   [
    'invoice' => 
     [
>>>>>>> 9a334cb (.)
      'label' => 'Fattura',
      'placeholder' => 'Carica la fattura',
      'helper_text' => 'Carica la fattura in formato PDF o immagine',
      'description' => 'Documento di fatturazione',
      'validation' => 
<<<<<<< HEAD
      array (
        'required' => 'Il caricamento della fattura è obbligatorio',
        'mimes' => 'Il file deve essere un documento PDF o un\'immagine',
        'max' => 'La dimensione massima del file è 10MB',
      ),
    ),
    'prescription' => 
    array (
=======
       [
        'required' => 'Il caricamento della fattura è obbligatorio',
        'mimes' => 'Il file deve essere un documento PDF o un\'immagine',
        'max' => 'La dimensione massima del file è 10MB',
      ],
    ],
    'prescription' => 
     [
>>>>>>> 9a334cb (.)
      'label' => 'Ricetta Medica',
      'placeholder' => 'Carica la ricetta medica',
      'helper_text' => 'Carica la prescrizione del medico',
      'description' => 'Prescrizione medica per farmaci o esami',
      'validation' => 
<<<<<<< HEAD
      array (
        'required' => 'La ricetta medica è obbligatoria',
        'mimes' => 'Formati supportati: PDF, JPG, PNG',
        'max' => 'Dimensione massima: 10MB',
      ),
    ),
    'medical_report' => 
    array (
=======
       [
        'required' => 'La ricetta medica è obbligatoria',
        'mimes' => 'Formati supportati: PDF, JPG, PNG',
        'max' => 'Dimensione massima: 10MB',
      ],
    ],
    'medical_report' => 
     [
>>>>>>> 9a334cb (.)
      'label' => 'Referto Medico',
      'placeholder' => 'Carica il referto medico',
      'helper_text' => 'Carica il referto o l\'esito degli esami',
      'description' => 'Documento medico con diagnosi e prescrizioni',
      'validation' => 
<<<<<<< HEAD
      array (
        'mimes' => 'Formati supportati: PDF, JPG, PNG',
        'max' => 'Dimensione massima: 10MB',
      ),
    ),
    'certificate' => 
    array (
=======
       [
        'mimes' => 'Formati supportati: PDF, JPG, PNG',
        'max' => 'Dimensione massima: 10MB',
      ],
    ],
    'certificate' => 
     [
>>>>>>> 9a334cb (.)
      'label' => 'Certificato1',
      'placeholder' => 'Carica il certificato',
      'helper_text' => 'Formati supportati: PDF, JPG, PNG',
      'description' => 'Certificato medico o documentazione sanitaria',
      'validation' => 
<<<<<<< HEAD
      array (
        'mimes' => 'Formati supportati: PDF, JPG, PNG',
        'max' => 'Dimensione massima: 10MB',
      ),
    ),
    'consent_form' => 
    array (
=======
       [
        'mimes' => 'Formati supportati: PDF, JPG, PNG',
        'max' => 'Dimensione massima: 10MB',
      ],
    ],
    'consent_form' => 
     [
>>>>>>> 9a334cb (.)
      'label' => 'Modulo di Consenso',
      'placeholder' => 'Carica il modulo di consenso',
      'helper_text' => 'Modulo di consenso informato firmato',
      'description' => 'Modulo di consenso informato firmato dal paziente',
      'validation' => 
<<<<<<< HEAD
      array (
        'mimes' => 'Formati supportati: PDF, DOC, DOCX',
        'max' => 'Dimensione massima: 10MB',
      ),
    ),
    'xray_image' => 
    array (
=======
       [
        'mimes' => 'Formati supportati: PDF, DOC, DOCX',
        'max' => 'Dimensione massima: 10MB',
      ],
    ],
    'xray_image' => 
     [
>>>>>>> 9a334cb (.)
      'label' => 'Immagine Radiografica',
      'placeholder' => 'Carica l\'immagine radiografica',
      'helper_text' => 'Immagini diagnostiche e radiografie',
      'description' => 'Immagine radiografica o diagnostica',
      'validation' => 
<<<<<<< HEAD
      array (
        'mimes' => 'Formati supportati: JPG, PNG, DICOM',
        'max' => 'Dimensione massima: 20MB',
      ),
    ),
    'treatment_plan' => 
    array (
=======
       [
        'mimes' => 'Formati supportati: JPG, PNG, DICOM',
        'max' => 'Dimensione massima: 20MB',
      ],
    ],
    'treatment_plan' => 
     [
>>>>>>> 9a334cb (.)
      'label' => 'Piano di Trattamento',
      'placeholder' => 'Carica il piano di trattamento',
      'helper_text' => 'Piano terapeutico personalizzato',
      'description' => 'Piano di trattamento personalizzato per il paziente',
      'validation' => 
<<<<<<< HEAD
      array (
        'mimes' => 'Formati supportati: PDF, DOC, DOCX',
        'max' => 'Dimensione massima: 10MB',
      ),
    ),
    'medical_history' => 
    array (
=======
       [
        'mimes' => 'Formati supportati: PDF, DOC, DOCX',
        'max' => 'Dimensione massima: 10MB',
      ],
    ],
    'medical_history' => 
     [
>>>>>>> 9a334cb (.)
      'label' => 'Storia Clinica',
      'placeholder' => 'Carica la storia clinica',
      'helper_text' => 'Documentazione sanitaria del paziente',
      'description' => 'Documentazione della storia clinica del paziente',
      'validation' => 
<<<<<<< HEAD
      array (
        'mimes' => 'Formati supportati: PDF, DOC, DOCX',
        'max' => 'Dimensione massima: 10MB',
      ),
    ),
    'doctor_certificate' => 
    array (
=======
       [
        'mimes' => 'Formati supportati: PDF, DOC, DOCX',
        'max' => 'Dimensione massima: 10MB',
      ],
    ],
    'doctor_certificate' => 
     [
>>>>>>> 9a334cb (.)
      'description' => 'doctor_certificate',
      'helper_text' => 'doctor_certificate1',
      'label' => 'doctor_certificate',
      'placeholder' => 'doctor_certificate',
<<<<<<< HEAD
    ),
  ),
  'validation' => 
  array (
=======
    ],
  ],
  'validation' => 
   [
>>>>>>> 9a334cb (.)
    'file_required' => 'Il file è obbligatorio',
    'file_type_invalid' => 'Tipo di file non supportato',
    'file_size_exceeded' => 'Dimensione del file troppo grande',
    'file_corrupted' => 'Il file sembra essere corrotto',
<<<<<<< HEAD
  ),
  'messages' => 
  array (
=======
  ],
  'messages' => 
   [
>>>>>>> 9a334cb (.)
    'upload_success' => 'File caricato con successo',
    'upload_error' => 'Errore durante il caricamento del file',
    'delete_success' => 'File eliminato con successo',
    'delete_error' => 'Errore durante l\'eliminazione del file',
<<<<<<< HEAD
  ),
);
=======
  ],
];
>>>>>>> 9a334cb (.)
