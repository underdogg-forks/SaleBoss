<?php namespace SaleBoss\Repositories;

use SaleBoss\Models\Lead;
use SaleBoss\Models\User;

interface LeadRepositoryInterface {
    /**
     * Bulk Lead creation
     *
     * @param array $data
     * @param User  $user
     * @return mixed
     */
    public function bulkCreate(array $data, User $user = null);


    /**
     * Count available leads
     *
     *
     * @return int
     */
    public function count ();

    /**
     * Update a lead
     *
     * @param \SaleBoss\Models\Lead $lead
     * @param array                 $data
     * @return mixed
     */
    public function update (Lead $lead, array $data =[]);



	/**
	 * @author bigsinoos <pcfeeler@gmail.com>
	 * Create lead from raw unfiltered data
	 *
	 * @param array $data
	 * @return mixed
	 */
	public function createRaw(array $data);

	public function getAllForLead(Lead $lead);

    public function getUserLeads(User $user, $int);

    public function getUserLeadsBetween(User $user, $todayStart, $todayEnd);
} 