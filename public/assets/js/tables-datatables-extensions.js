/**
 * DataTables Extensions (js)
 */
'use strict';

document.addEventListener('DOMContentLoaded', function (e) {
    const dt_scrollable_table = document.querySelector('.dt-scrollableTable');
    let dt_scrollableTable;

    if (dt_scrollable_table) {
        dt_scrollableTable = new DataTable(dt_scrollable_table, {
            ajax: assetsPath + '/json/table-datatable.json', // Sesuaikan path JSON Anda
            columns: [
                { data: 'id_mcu', title: 'ID MCU' },
                { data: 'nama', title: 'Nama' },
                { data: 'nik', title: 'NIK' },
                { data: 'tanggal_mcu', title: 'Tanggal MCU' },
                { data: 'status', title: 'Status' }
            ],
            columnDefs: [
                {
                    targets: 4, // Kolom status (indeks ke-4)
                    render: function (data, type, full, meta) {
                        // Pemetaan status Anda
                        const statusMap = {
                            'Fit': { title: 'Fit', class: 'bg-label-success' },
                            'Fit With Note': { title: 'Fit With Note', class: 'bg-label-warning' },
                            'Pending': { title: 'Pending', class: 'bg-label-primary' },
                            'Unfit': { title: 'Unfit', class: 'bg-label-warning' }
                        };

                        if (data in statusMap) {
                            return `
                                <span class="badge rounded-pill ${statusMap[data].class}">
                                    ${statusMap[data].title}
                                </span>
                            `;
                        }
                        return data; // Jika status tidak terdefinisi, tampilkan teks biasa
                    }
                },
                {
                    targets: 5, // Kolom aksi tambahan, sesuaikan jika ada
                    title: 'Actions',
                    searchable: false,
                    orderable: false,
                    className: 'd-flex align-items-center',
                    render: function (data, type, full, meta) {
                        return (
                            '<div class="d-inline-block">' +
                            '<a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="icon-base ri ri-more-2-fill icon-20px"></i></a>' +
                            '<div class="dropdown-menu dropdown-menu-end m-0">' +
                            '<a href="javascript:;" class="dropdown-item">Detail</a>' +
                            '<div class="dropdown-divider"></div>' +
                            '<a href="javascript:;" class="dropdown-item text-danger delete-record">Hapus</a>' +
                            '</div>' +
                            '</div>' +
                            '<a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit"><i class="icon-base ri ri-edit-box-line icon-20px"></i></a>'
                        );
                    }
                }
            ],
            scrollY: '300px',
            scrollX: true,
            layout: {
                topStart: {
                    rowClass: 'row mx-2 justify-content-between',
                    features: [
                        {
                            pageLength: {
                                menu: [7, 10, 25, 50, 100],
                                text: 'Show_MENU_entries'
                            }
                        }
                    ]
                },
                topEnd: {
                    search: {
                        placeholder: 'Type search here'
                    }
                },
                bottomStart: {
                    rowClass: 'row mx-2 justify-content-between',
                    features: ['info']
                },
                bottomEnd: 'paging'
            },
            language: {
                paginate: {
                    next: '<i class="icon-base ri ri-arrow-right-s-line scaleX-n1-rtl icon-22px"></i>',
                    previous: '<i class="icon-base ri ri-arrow-left-s-line scaleX-n1-rtl icon-22px"></i>',
                    first: '<i class="icon-base ri ri-skip-back-mini-line scaleX-n1-rtl icon-22px"></i>',
                    last: '<i class="icon-base ri ri-skip-forward-mini-line scaleX-n1-rtl icon-22px"></i>'
                }
            },
            initComplete: function (settings, json) {
                dt_scrollable_table.querySelector('tbody tr:first-child').classList.add('border-top-0');
            }
        });
    }

    setTimeout(() => {
        const elementsToModify = [
            { selector: '.dt-layout-table', classToRemove: 'row mt-2' },
            { selector: '.dt-layout-end', classToAdd: 'mt-0', classToRemove: 'ms-auto' },
            { selector: '.dt-layout-end .dt-search', classToAdd: 'mt-md-5 mt-0', classToRemove: 'ms-auto' },
            { selector: '.dt-layout-full', classToRemove: 'col-md col-12', classToAdd: 'table-responsive' }
        ];

        elementsToModify.forEach(({ selector, classToRemove, classToAdd }) => {
            document.querySelectorAll(selector).forEach(element => {
                if (classToRemove) {
                    classToRemove.split(' ').forEach(className => element.classList.remove(className));
                }
                if (classToAdd) {
                    classToAdd.split(' ').forEach(className => element.classList.add(className));
                }
            });
        });
    }, 100);
});
